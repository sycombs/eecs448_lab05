function validate()
{
  let email = document.forms["shopForm"]["email"].value;
  let pwd = document.forms["shopForm"]["password"].value;

  if (!(email.includes("@") && email.endsWith(".com")))
  {
    return false;
  }
  else if (pwd == "")
  {
    return false;
  }
  else {
    return true;
  }
}
