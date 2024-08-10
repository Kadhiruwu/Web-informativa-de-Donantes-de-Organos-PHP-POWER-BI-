function handleSelectChange(event) {
    var selectedValue = event.target.value;
    if (selectedValue === "dashboard1") {
        window.location.href = "/user/dashboard1";
    }
    if (selectedValue === "dashboard2") {
        window.location.href = "/user/dashboard2";
    }

    if (selectedValue === "dashboard3") {
        window.location.href = "/user/dashboard3";
    }

    if (selectedValue === "dashboard4") {
        window.location.href = "/user/dashboard4";
    }

    if (selectedValue) {
        window.location.href = "/user/" + selectedValue + "?selected=" + selectedValue;
    }
    // Puedes agregar más condiciones para otras opciones si es necesario
}
