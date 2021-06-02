function submitForm(form) {
    var score = 0;
    if (form.one[0].checked) {
        score += 1;
    }
    if (form.two[1].checked) {
        score += 1;
    }
    if (form.three[2].checked) {
        score += 1;
    }
    if (form.four[2].checked) {
        score += 1;
    }
    if (form.five[2].checked) {
        score += 1;
    }
    window.alert("Your form has been submitted. Your Score is : " + score);
}