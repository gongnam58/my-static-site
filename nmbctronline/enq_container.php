

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Northport Online Enquiries: Container Enquiry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/imgs/fav.png">
  <link rel="stylesheet" href="assets/css/w3.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/font-awesome/css/all.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/utils.js"></script>

  <!-- Inactivity Script -->
  <!-- <script src="assets/js/inactivity.js"></script> -->
  
  <!-- Prevent back to this page after navigate to index -->
  <script type="text/javascript">
    function preventBack() {window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
  </script>
</head>
<body>
	<!-- Header -->
  <div class="header">
    <img src="assets/imgs/np_logo.png" class="header_logo">
    <p class="txt_header_title">Container Enquiry</p>
    <a href="index.html"><button class="btn_backHeader"><span><i class="far fa-arrow-alt-circle-left"></i> HOME</button></a>
  </div>

  <!-- Main Content -->
  <div class="div_content">
    <form method="POST">
      <label>Container#</label>
      <input class="input-input" style="text-transform:uppercase" oninput="this.value = this.value.toUpperCase()" type="text" name="container_number" pattern="[A-Z0-9]+" required value=>

      <button class="btn_search" type="submit" name="submit"><i class="fas fa-search"></i> Search</button>
    </form>

    <!-- Display Search Result -->
      </div>

  <!-- Footer -->
  <div class="footer">
  <p>
    Copyright &copy; 2024 <a href="#">Northport (M) Bhd</a>. All rights reserved.
  </p>
</div>
  <!-- javascript -->
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable({
        // "order": [[ 4, "asc"]],
        // "scrollY": "401px",
        // "scrollCollapse": true,
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ]
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#example2').DataTable({
        // "order": [[ 1, "asc"]],
        // "scrollY": "401px",
        // "scrollCollapse": true,
        "lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ]
      });
    });
  </script>

  <!-- Button Bundle/Holds -->
  <script>
    function showHolds(){
      document.getElementById("Cont_result1").style.display = "none";
      document.getElementById("Cont_result2").style.display = "block";
    }

    function showBundle(){
      document.getElementById("Cont_result2").style.display = "none";
      document.getElementById("Cont_result1").style.display = "block";
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("btnCont_div");
    var btns = document.getElementsByClassName("btn_do_result");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = btnContainer.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }

		// prevent resubmit on refresh
		if(window.history.replaceState){
			window.history.replaceState(null,null, window.location.href);
		}
  </script>
</body>
</html>