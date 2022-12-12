<?php
include('connection.php');
session_start()
?>


<?php
if (isset($_POST['submit_find'])) {
    $id = $_POST['id'];
    $conn->query("INSERT INTO find_book (book_id) 
                VALUES('$id')") or die($conn->error);

?>
    <script>
        window.location.href = "proceed.php";
    </script>
<?php
}
?>

<?php

if (isset($_POST['barcode_submit'])) {
    $barcode = $_POST['bcode'];
    $find="SELECT * FROM data WHERE Barcode='$barcode'";
    $prompt = mysqli_query($conn, $find);
    $getData = mysqli_fetch_array($prompt);
    $cnt = mysqli_num_rows($prompt);
    


    if ($cnt>0) {
        $title = $getData['Title'];
        $author = $getData['Author'];
        $classification_code = $getData['Classification_code'];
        $year = $getData['Year'];
        $category = $getData['Category'];
        $conn->query("INSERT INTO logbook (title,author,classification_code,barcode,year) 
                VALUES('$title','$author','$classification_code','$barcode','$year')") or die($conn->error);
        
        $conn->query("INSERT INTO find_book (book_id,title) 
        VALUES('$category','$title')") or die($conn->error);
        
?>
<script>
    window.location.href = "logbooks.php";
</script>
<?php
    }
    else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
          $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Barcode Does not Exist',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "logbooks.php";
                    }else{
                        window.location.href = "logbooks.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}
?>