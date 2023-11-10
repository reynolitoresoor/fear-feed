 <?php
include 'config.php';
/**
 * Database class
 * @package project
 * @author reynolito reso-or
 * @copyright (C)2017
*/
class Database
{
    
    public $status; 
    
    public $last_insert_id; 

    protected $_conn; 

    function __construct()
    {

        $this->open();

    }
    
    /*close connection*/
    protected function close(){

        mysqli_close($this->_conn);

    }



    /*reopens connection for further process*/
    public function open(){
        //Create connection on instance
        $conn = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if(!$conn){

            die("Connection failed: " . mysqli_connect_error());

        }

        $this->_conn = $conn;
    }

    public function escapeString($string)
    {
        return mysqli_real_escape_string($this->_conn, $string);
    }

    /**
     * @param string $sql
     * @return array
     */
    public function emteDirectQuery($sql ='', $type='select'){

        $status = null;

        $result = mysqli_query($this->_conn, $sql);

        switch ($type) {

            case 'single_update':

                $this->status = $result; 

                $status = $this;

                break;

            case 'update':

                if ($result) {

                    $status = "Successfully updated.";

                }else{

                    $status = "Unable to update record.";

                }

                break;

            case 'single_row':

                $this->status = mysqli_fetch_assoc($result);

                $status = $this;

                break;
            case 'row':

                $status = mysqli_fetch_assoc($result);

                break;
            case 'array':

                if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {

                        $status[$row['list_id']] = $row;

                    }

                }

                break;
            case 'select':

                if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)) {

                        $status[] = $row;

                    }

                }

                break;

            case 'add':
                if ($result) {
                    $result = mysqli_insert_id($this->_conn);
                }
                $this->status = $result;

                $status  = $this;
                
                break;

            case 'delete':

                $this->status = $result;

                $status  = $this;

                break;

            case 'insert':

                if ($result) {

                    $this->last_insert_id = mysqli_insert_id($this->_conn);

                    $status  = "New record created successfully";

                } else {

                    $status  = "Error: " . $sql . "<br>";

                }

                break;
            
            default:
                // code...
                break;

        }
            
        $this->close();

        return $status;

    }   
    
}
    
        
?>
