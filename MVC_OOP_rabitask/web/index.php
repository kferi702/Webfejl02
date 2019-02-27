<?php

/**
 * Class handles SQL connection, execution, fetch
 */
class SQL
{

    /**
     * PDO instance to connection
     * @var PDO
     */
    private $dbh;

    /**
     * Connect the db in every run
     * 
     * @param string $dsn
     * @param string $user
     * @param string $password
     */
    public function __construct($dsn, $user, $password)
    {
        $this->connect($dsn, $user, $password);
    }

    /**
     * Connect the db
     * 
     * @param string $dsn
     * @param string $user
     * @param string $password
     * @throws Exception
     */
    public function connect($dsn, $user, $password)
    {
        try {
            $this->dbh = new PDO($dsn, $user, $password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
        } catch (PDOException $e) {
            throw new Exception('Connection failed!');
        }
    }

    /**
     * Executes sql query
     * 
     * @param string $sql
     * @param array $params
     * @return PDOStatement
     * @throws Exception
     */
    private function execute($sql, $params = [])
    {
        $stmt = $this->dbh->prepare($sql);
        foreach ($params as $k => $p) {
            if (!$stmt->bindValue($k, $p)) {
                throw new Exception("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            }
        }

        if (!$stmt->execute()) {
            throw new Exception("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }

        return $stmt;
    }

    /**
     * Executes query and read all matched result
     * 
     * @param string $sql
     * @param array $params
     * @param int $fetchmode
     * @return array
     */
    public function fetchAll($sql, $params = [], $fetchmode = PDO::FETCH_ASSOC)
    {
        $ret = [];
        $stmt = $this->execute($sql, $params);
        while ($row = $stmt->fetch($fetchmode)) {
            $ret[] = $row;
        }
        return $ret;
    }

    /**
     * Executes query and read one matched result
     * 
     * @param string $sql
     * @param array $params
     * @param int $fetchmode
     * @return array
     */
    public function fetchOne($sql, $params = [], $fetchmode = PDO::FETCH_ASSOC)
    {
        return $this->execute($sql, $params)->fetch($fetchmode);
    }

}

/**
 * Base class for models
 * Model classes extend here
 * 
 */
class BaseModel
{

    /**
     * 
     * @var SQL
     */
    protected $sql;

    /**
     * Sets SQL value
     * @param SQL $sql
     */
    public function __construct($sql)
    {
        $this->sql = $sql;
    }

}

/**
 * Base controller class for handle http requests
 */
class BaseController
{

    /**
     * @var SQL
     */
    protected $sql;
    /**
     * @var string
     */
    protected $layout = 'layout/layout.php';
    /**
     * @var string
     */
    protected $title = '--';

    /**
     * Sets sql value every run
     * Creates sql connection
     * 
     * @param array $params
     */
    public function __construct($params)
    {
        $this->sql = new SQL($params['db']['dsn'], $params['db']['user'], $params['db']['password']);
    }

    /**
     * Make characters safe from XSS (prevent)
     * 
     * @param string $unsafe
     * @return string
     */
    public function escapeHtml($unsafe)
    {
        return htmlspecialchars($unsafe);
    }

    /**
     * Runs required method from url with params
     * 
     * @param string $method
     * @param array $params
     */
    public function work($method, $params = [])
    {
        $c = call_user_func_array([$this, $method], $params);
        echo $this->render($this->layout, [
            'content' => $c,
            'title' => $this->title,
        ]);
    }

    /**
     * Renders view file
     * 
     * @param string $view
     * @param array $variables
     * @return type
     */
    protected function render($view, $variables = [])
    {
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include __DIR__ . '/../view/' . $view;

        // End buffering and return its contents
        $output = ob_get_clean();
        return $output;
    }

    /**
     * Handle url requests
     * Uses regex
     * 
     * @param array $params
     * @throws Exception
     */
    public static function startup($params)
    {
        $p = isset($_GET['path']) ? $_GET['path'] : '';
        foreach ($params['rule'] as $regexp => $data) {
            $m = [];
            if (preg_match($regexp, $p, $m)) {
                require_once(__DIR__ . '/../controller/' . $data[0] . '.php');
                $controller = new $data[0]($params);
                if (count($m) > 1) {
                    array_shift($m);
                } else {
                    $m = [];
                }
                call_user_func_array([$controller, 'work'], [$data[1], $m]);
                exit(0);
            }
        }
        throw new Exception('Not found url matching!');
    }

}
BaseController::startup([
    'db' => [
        'dsn' => 'mysql:host=localhost;dbname=rabitask;charset=utf8',
        'user' => 'root',
        'password' => '',
    ],
    'rule' => [
        '#^user/(\d+)[/]*$#ui' => ['DefaultController', 'actionUserById'],
        '#^user/(.+)[/]*$#ui' => ['DefaultController', 'actionUserByName'],
        '#^advertisement/(\d+)[/]*$#ui' => ['DefaultController', 'actionAdvById'],
        '#^advertisement/(.+)[/]*$#ui' => ['DefaultController', 'actionAdvByTitle'],
        '#.*#' => ['DefaultController', 'actionAll'],
    ],
]);


