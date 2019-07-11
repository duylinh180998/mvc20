function add() {
    window.location ="index.php?controller=book&action=add";
}
function cancel1() {
    window.location="index.php";
}
function check() {
    if(document.getElementById('name').value==""||document.getElementById('id').value==""){
        document.getElementById('error').innerHTML="Ko để Trống";
        return false;
    }
}