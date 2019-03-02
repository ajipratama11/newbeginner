
function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("carivaksin");
  filter = input.value.toUpperCase();
  table = document.getElementById("vaksin");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }

}

function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("carippi");
  filter = input.value.toUpperCase();
  table = document.getElementById("ppi");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }

}
