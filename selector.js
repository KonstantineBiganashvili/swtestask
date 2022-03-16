function yesnoCheck(that) 
{
    if (that.value == "DVD") 
    {
        document.getElementById("discSize").style.display = "block";
    }
    else
    {
        document.getElementById("discSize").style.display = "none";
    }
    if (that.value == "book")
    {
        document.getElementById("bookWeight").style.display = "block";
    }
    else
    {
        document.getElementById("bookWeight").style.display = "none";
    }
    if (that.value == "furniture")
    {
        document.getElementById("furnitureParameters").style.display = "block";
    }
    else
    {
        document.getElementById("furnitureParameters").style.display = "none";
    }
}