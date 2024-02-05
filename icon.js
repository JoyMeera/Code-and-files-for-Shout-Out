function validateForm() {
    // Get all radio buttons with the name "mood1"
    var radioButtons = document.getElementsByName("mood1");
    var isChecked = false;
    // Check if at least one radio button is checked
    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        isChecked = true;
        break;
      }
    }
    // If no radio button is checked, display an error message and prevent form submission
    if (!isChecked) {
      alert("Please choose an emoji.");
      return false;
    }
    return true;
  }