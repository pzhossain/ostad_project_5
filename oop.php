<?php

class Book {

 // TODO: Add properties as Private

 private $bookName;
 private $copies;
 
public function __construct($title, $availableCopies) {
     // TODO: Initialize properties

    $this -> bookName = $title;
    $this -> copies = $availableCopies;
     }

// TODO: Add getTitle method
public function getTitle (){
    return $this -> bookName;
}

 // TODO: Add getAvailableCopies method
public function getAvailableCopies (){
    return $this -> copies;
}
 
 // TODO: Add borrowBook method
public function borrowBook (){
    if ($this -> copies > 0){
        $this -> copies --;
        return true;
    }
    else {
        return false;
    }
}

 // TODO: Add returnBook method
 public function returnBook (){
        $this -> copies ++;
    }
}


class Member {
 // TODO: Add properties as Private
private $memberName;

 public function __construct($name) {
      // TODO: Initialize properties
      $this -> memberName = $name;
     }

 // TODO: Add getName method
 public function getName (){
    return $this -> memberName;
 }
 
 // TODO: Add borrowBook method
 public function borrowBook ($book){
    if ($book -> borrowBook ()){
        echo $this -> memberName . "successfully borrow  '" . $book-> getTitle (). "'" . "</br>";
    } else {
        echo "$book-> getTitle () . is out of stock.";
    }    
 }

 // TODO: Add returnBook method
 public function returnBook ($book){
    $book -> returnBook ();
    echo $this -> memberName . "returned the book: " . $book -> getTitle () . "</br>";
 }
}

// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
 
$book1 = new Book ("The Great Gatsby", 5);
$book2 = new Book ("To Kill a Mockingbird", 3); 

// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith

$member1 = new Member ("John Doe");
$member2 = new Member ("Jane Smith");

 
// TODO: Apply Borrow book method to each member
$member1 -> borrowBook ($book1);
$member2 -> borrowBook ($book2);
 
// TODO: Print Available Copies with their names:

echo "</br>";
// echo "Available Copies Of ' ".$book1->getTitle()." ':" .$book1->getAvailableCopies(). "</br>";

echo "Available copies of- '" .$book1->getTitle(). "' : " . $book1-> getAvailableCopies () . "</br>";
echo "Available copies of- '" . $book2->getTitle() . "' : " . $book2-> getAvailableCopies () . "</br>";
 
?>