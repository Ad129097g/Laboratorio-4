function validacion() {
    const edadInput = document.getElementById("edad");
    const edad = edadInput.value;
    if (edad < 18) {
      alert("Solo se admiten usuarios mayores de edad");
      return false;
    }
    return true;
  }