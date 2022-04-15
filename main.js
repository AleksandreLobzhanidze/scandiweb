
// Get elements

var input = document.getElementById("productType");
var productInputs = document.getElementById("productInputs");

var check = document.getElementById('check');
let list = [];
let templist = [];

function checkList(arr, target){
    
    if(!arr.includes(target)){
        arr.push(target);
        
        
    }else{
         templist = list.filter(function(x){
             return x != target;
         })
         list = templist;
         
         
    }

}

// Show buttons Delete and Delete All
function showButtons(list){
    if(list.length == 0 ){
        document.getElementById('delete-product-btn-all').style.display = "block";
        document.getElementById('delete-product-btn').style.display = "none";

    }else if(list.length > 0){
        document.getElementById('delete-product-btn-all').style.display = "none";
        document.getElementById('delete-product-btn').style.display = "block";

    }


}

//  To execute Delete functions
function test(event){

        checkList(list, event.target.value);
        showButtons(list);

}

var inputLen="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"



// To add inputs after select type

function addinputs(x){

    if(x==='select'){
        productInputs.innerHTML=`
            <div class="form-group"  style="margin-top: 10px">
            
            </div>`;
    }else if(x==='dvd'){
        productInputs.innerHTML=`
        <div class="form-group" style="margin-top: 10px">
        <label>Size(MB)</label>
        <input type="number" oninput="${inputLen}" maxlength="10" name="mb">
        </div>`;
    }else if(x==='book'){
        productInputs.innerHTML=`
        <div class="form-group" style="margin-top: 10px">
        <label>Weight(KG)</label>
        <input type="number" oninput="${inputLen}"  maxlength="10" name="kg">
        </div>`;

    }else if(x==='furniture'){
        productInputs.innerHTML=`
        <div class="form-group" style="margin-top: 10px">
        <label style="margin-top: 10px">Height(CM)</label>
        <input type="number" oninput="${inputLen}" maxlength="5" name="height">
        <br>
        <label style="margin-top: 10px">Width(CM)</label>
        <input style="margin-left: 6px" oninput="${inputLen}" maxlength="5" type="number" name="width">
        <br>
        <label style="margin-top: 10px">Length(CM)</label>
        <input type="number" oninput="${inputLen}" maxlength="5" name="length">
        </div>`;
    }

}



