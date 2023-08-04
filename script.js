
document.getElementById("search-btn").addEventListener("click",eventHand);
document.getElementById("form-eff").addEventListener("click",()=>{
     document.getElementById("search-bar").classList.remove("search-click-effect-disable");
     document.getElementById("search-bar").classList.add("search-click-effect-active");



})
function eventHand(){
    
    search_anime();
    document.getElementById("search-btn").removeEventListener("click",eventHand);
}
function addingInput(){
        // Get the container element where the input element will be added
        const container = document.getElementById('search-container');

        // Create the input element with type "text", class "form-control", and ID "form-eff"
        const inputElement = document.createElement('input');
        inputElement.setAttribute('type', 'text');
        inputElement.setAttribute('class', 'form-control');
        inputElement.setAttribute('id', 'form-eff');
        inputElement.style.border = 'none';
    
        // Append the input element to the container
        container.appendChild(inputElement);
}
function removingDivs(){
    document.getElementById("st-1");
}




function search_anime(){
    anime({
        targets: '.search-bar-group ',
        width:['25vw','50vw'],
        easing: 'easeInOutQuad',
          duration: 500,
       
      });
      anime({
        targets:'.header',
        height:['15vh','30vh'],
        easing:'easeInOutQuad',
        duration: 500,
      })
      document.getElementById("content-body").addEventListener("click",searcheventHandler);


      function searcheventHandler(event){
        anime(
            {
                targets:'.header',
                height:['30vh','15vh'],
                easing:'easeInOutQuad',
                duration: 500,  
            }
        );
        anime({
            targets: '.search-bar-group ',
            width:['50vw','25vw'],
            easing: 'easeInOutQuad', 
        duration: 800, 
          });

          document.getElementById("content-body").removeEventListener("click",searcheventHandler);
          document.getElementById("search-btn").addEventListener("click",eventHand);
          document.getElementById("search-bar").classList.add("search-click-effect-disable");
          document.getElementById("search-bar").classList.remove("search-click-effect-active");
     
      }
}
