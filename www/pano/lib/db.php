<?php
class DB{

  static private $_instance = null;

  private function __construct(){
    //Подключается к хосту.
    $this->connect = pg_connect('host=data1.geo.indorsoft.ru dbname=road port=5432 user=road password=Beluga');
  }


   //Возвращает запись в виде массива.

  public static function fetchArray($object){
    return @pg_fetch_array($object);
  }


   //Возвращает ряд результата запроса в качестве ассоциативного массива.

  public static function fetchAssoc($object){
    return @pg_fetch_assoc($object);
  }


   //Возвращает запись в виде объекта.

  public static function fetchObject($object){
    return @pg_fetch_object($object);
  }


  //Возвращет единственный экземпляр данного класса.

  static public function getInstance(){
    if(is_null(self::$_instance)){
      self::$_instance = new self;
    }
    return self::$_instance;
  }


   //Инициализирует единственный объект данного класса.

  public static function init(){
    self::getInstance();
  }


   //Возвращает сгенерированный колонкой с AUTO_INCREMENT

  public static function insertId(){
    return @pg_insert();
  }


   //Возвращает количество рядов результата запроса.

  public static function numRows($object){
    return @pg_num_rows($object);
  }


   //Выполняет запрос к БД.

  public static function query($sql){

    if(($num_args = func_num_args()) > 1){
      $arg = func_get_args();
      unset($arg[0]);

      // Экранируем кавычки для всех входных параметров
      foreach($arg as $argument => $value){
        $arg[$argument] = pg_escape_string($value);

      }
      $sql = vsprintf($sql, $arg);
    }
    $obj = self::$_instance;

    if(isset($obj->connect)){
      $obj->count_sql++;

      $result = pg_query($sql) or die('<br/><span style="color:red">Ошибка в SQL запросе:</span> ');
      return $result;
    }
    return false;
  }


   //Экранирует кавычки для части запроса.

  public static function quote($string){
    return "'".pg_escape_string($string)."'";
  }
}