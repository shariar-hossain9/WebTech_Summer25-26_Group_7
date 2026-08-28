function errorMessage(message){ alert(message); return false; }
function validEmail(value){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value); }
function validPhone(value){ return /^01[3-9][0-9]{8}$/.test(value); }
function valueOf(form,name){ return form.elements[name].value.trim(); }
