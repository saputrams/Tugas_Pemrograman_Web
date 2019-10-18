<?php require_once 'kiri.php' ?>
<script>
    function fibonaci(){
        var a = 0;
        var b = 1;
        var c = 0;
        var number = "";

        number += a;
        number += ","+b;
        while(c < 15){
            c = a+b;
            a = b;
            b = c;

            number += ","+c;
        }
        return number;
    }

    function showFibonaci(){
       
      Swal.fire(fibonaci())
    }


</script>
<button type="button" class="btn btn-primary" onclick="showFibonaci()">Fibonaci</button>

<?php require_once 'bawah.php' ?>