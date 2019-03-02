function myFunction3() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("pilihumur");
  filter = input.value.toUpperCase();
  table = document.getElementById("kpsp");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 2; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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