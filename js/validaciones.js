$('#form-correo').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9@.-_]/g,'');
});
$('#form-password').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9@.-_]/g,'');
});
$('#form-cedula').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z]/g,'');
});
$('#form-name').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z]/g,'');
});
$('#form-lastname').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9@.-_]/g,'');
});
$('#form-dir1').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9.,;']/g,'');
});
$('#form-dir2').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9.,;']/g,'');
});
$('#form-telefono').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9.,;']/g,'');
});
$('#form-username').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9.,;']/g,'');
});
$('#form-repassword').keyup(function () { 
    this.value = this.value.replace(/[^a-zA-Z0-9.,;']/g,'');
});
