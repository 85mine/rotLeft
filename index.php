/**
 * Rotate an array left d times.
 * 
 * @param int $n The number of items in the array.
 * @param int $d The number of left rotations to perform.
 * @return array The rotated array.
 */
function rotLeft($n, $d) {
    // Generate the array [1, 2, ..., n]
    $a = range(1, $n);
    
    // Handle case when d > n by taking the modulus
    $d = $d % $n;
    
    // Perform d left rotations
    for ($i = 0; $i < $d; $i++) {
        // Store the first element in a temporary variable
        $temp = $a[0];
        
        // Shift all other elements one position to the left
        for ($j = 0; $j < $n - 1; $j++) {
            $a[$j] = $a[$j + 1];
        }
        
        // Move the first element to the end of the array
        $a[$n - 1] = $temp;
    }
    
    // Return the rotated array
    return $a;
}

//Example
echo implode(',',rotLeft(5,4));
