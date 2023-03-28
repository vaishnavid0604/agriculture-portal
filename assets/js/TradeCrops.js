function tradecrops() {
    
    var temp = document.getElementById("trade_farmer_cost").value;
    var cost = Number(temp);
    var crop=document.getElementById("crops").value;

    var goAhead = true;
    

    if(!crop.localeCompare("arhar")) {
        if((cost>(39+Math.ceil(39*0.05)))||(cost<(39-Math.ceil(39*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }

    if(!crop.localeCompare("bajra")) {
        if((cost>(14+Math.ceil(14*0.05)))||(cost<(14-Math.ceil(14*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("barley")) {
        if((cost>(11+Math.ceil(11*0.05)))||(cost<(11-Math.ceil(11*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("cotton")) {
        if((cost>(37+Math.ceil(37*0.05)))||(cost<(37-Math.ceil(37*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("gram")) {
        if((cost>(33+Math.ceil(33*0.05)))||(cost<(33-Math.ceil(33*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("jowar")) {
        if((cost>(17+Math.ceil(17*0.05)))||(cost<(17-Math.ceil(17*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("jute")) {
        if((cost>(27+Math.ceil(27*0.05)))||(cost<(27-Math.ceil(27*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("lentil")) {
        if((cost>(32+Math.ceil(32*0.05)))||(cost<(32-Math.ceil(32*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("maize")) {
        if((cost>(12+Math.ceil(12*0.05)))||(cost<(12-Math.ceil(12*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("moong")) {
        if((cost>(47+Math.ceil(47*0.05)))||(cost<(47-Math.ceil(47*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("ragi")) {
        if((cost>(21+Math.ceil(21*0.05)))||(cost<(21-Math.ceil(21*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("rice")) {
        if((cost>(13+Math.ceil(13*0.05)))||(cost<(13-Math.ceil(13*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("soyabean")) {
        if((cost>(25+Math.ceil(25*0.05)))||(cost<(25-Math.ceil(25*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("urad")) {
        if((cost>(38+Math.ceil(38*0.05)))||(cost<(38-Math.ceil(38*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }


    if(!crop.localeCompare("wheat")) {
        if((cost>(13+Math.ceil(13*0.05)))||(cost<(13-Math.ceil(13*0.05)))){
        alert("Price is not in current market range");
        goAhead = false;
        }
    }

    
    return goAhead;
}