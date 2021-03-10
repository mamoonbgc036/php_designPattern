<?php
interface Saver
{
    public function save($input);
}

class DBSaver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving '$input' to DB table");
    }
}
class LocalFileSaver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving '$input' to local filesystem");
    }
}
class AmazonS3Saver implements Saver
{
    public function save($input)
    {
        var_dump(__METHOD__ . " Saving '$input' to amazon s3 (cloud) storage");
    }
}

$user_submitted_data = "foo"; // the data to save
$user_submitted_where_to_save_to = 'local';  // where to save it
// so we can get the class to use, from the user submitted value
// I will assume some validation has already occurred and we know that $user_submitted_where_to_save_to is one of these keys
$savers = [
    'db'=>DBSaver::class,
    'local'=>LocalFileSaver::class,
    's3'=>AmazonS3Saver::class,
];
// create the required object - 
$saver_object = new $savers[$user_submitted_where_to_save_to]; // i.e. new $savers['local'] which is the same as new LocalFileSaver();
// and send that object (and the submitted data) to some function that will save it.
save($user_submitted_data, $saver_object);
// notice that the 2nd param for this function is an object that implements the Saver interface
function save($data, Saver $saver)
{
    return $saver->save($data);
}