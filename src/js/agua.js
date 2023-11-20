
// Control nivel de agua
function nivel_agua(agua) {

      if(agua < 1000 ){
        document.getElementById("vacio").hidden = false;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 1000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = false;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 2000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = false;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 3000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = false;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 4000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = false;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 5000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = false;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 6000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = false;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 7000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = false;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 8000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = false;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 9000 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = false;
        document.getElementById("depo_100").hidden = true;
      }
      if(agua >= 9500 ){
        document.getElementById("vacio").hidden = true;
        document.getElementById("depo_10").hidden = true;
        document.getElementById("depo_20").hidden = true;
        document.getElementById("depo_30").hidden = true;
        document.getElementById("depo_40").hidden = true;
        document.getElementById("depo_50").hidden = true;
        document.getElementById("depo_60").hidden = true;
        document.getElementById("depo_70").hidden = true;
        document.getElementById("depo_80").hidden = true;
        document.getElementById("depo_90").hidden = true;
        document.getElementById("depo_100").hidden = false;
      }

  }