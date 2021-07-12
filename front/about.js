


let images = [];
let n = 1;
for (var i = 0; i < n; i++) {
    var image = new Image();
    Image.src = '../assets/pictures/godzi.jpg';
    Image.src = 'src="../assets/pictures/lovecraft.jpg"'
    images.push(image);
}


console.table(images);







function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
