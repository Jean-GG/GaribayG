new gridjs.Grid({
    columns: ["RFC", "Nombre", "Telefono","Curp","Domicilio","CodigoPostal","Puesto","EstadoCivil"],
    search: true,
    server:{
      url: "/GaribayG/Parcial3/Gridjs/consulta.php",
      then: data => data.map(item => [item.Rfc, item.Nombre, item.Telefono, item.Curp, item.Domicilio, item.CodigoPostal, item.Puesto, item.EstadoCivil])
    }
  }).render(document.getElementById("datos"));