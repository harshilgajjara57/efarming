<!DOCTYPE html>
<html>
<head>
	<title>incorrect password</title>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>
<body>
	<button name="button" onclick="validateForm()">Click Me!</button>
<script type="text/javascript">
function validateForm() {
  Swal.fire({
  type: 'error',
  title: 'Wrong Username or Password',
  text: 'Something went wrong!',
  footer: '<a href>Why do I have this issue?</a>'
})
  }
</script>
</body>
</html>