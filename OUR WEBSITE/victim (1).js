let analysisBtn=document.getElementById("submit")
console.log(analysisBtn)
let resultSection=document.querySelector(".analysis_result")
let incident_description=""
analysisBtn.addEventListener("click",(e)=>{
    e.preventDefault();
   incident_description=document.getElementById("victim_text").value
  console.log(incident_description)
    resultSection.style.display="block"
})
