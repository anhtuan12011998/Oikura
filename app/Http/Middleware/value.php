Using if ( file(name.txt) ) might not be enough for testing if the file was successfully opened for reading because the file could be empty in which case the array returned is empty, so test instead with !==. e.g.:

$file_array = file('test.txt'); // an empty file

echo '<pre>';
if ( $file_array ) {
    # code...
    echo "success\n";
} else {
    # code...
    echo "failure\n"; // executed
}

if ( $file_array !== false ) {
    # code...
    echo "success\n"; // executed
} else {
    # code...
    echo "failure\n";
}
echo '</pre>';

result:
failure
success