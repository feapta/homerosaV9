
// Control nivel de gasoil

function nivel_Gasoil(gasoil){

    if(gasoil >= 12.5){document.getElementById("tanque_1").style = "background-color: #50B8B4";
    } else {
        document.getElementById("tanque_1").style = "background-color: transparent";
    }
    
    if(gasoil >= 25  ){document.getElementById("tanque_2").style = "background-color: #50B8B4";
    } else {document.getElementById("tanque_2").style = "background-color: transparent";
    }
    
    if(gasoil >= 37.5){document.getElementById("tanque_3").style = "background-color: #50B8B4";
    } else {
        document.getElementById("tanque_3").style = "background-color: transparent";
    }
    
    if(gasoil >= 45  ){document.getElementById("tanque_4").style = "background-color: #50B8B4";
    } else {
        document.getElementById("tanque_4").style = "background-color: transparent";
    }
    
}

