function Review(name, pfp, location, review, favItem, favItemComment) {
  this.name = name;
  this.pfp = pfp;
  this.location = location;
  this.review = review;
  this.favItem = favItem;
  this.favItemComment = favItemComment;
}

let myArr = [];

for (let index = 0; index < 20; index++) {
  myArr[index] = new Review(
    "David",
    "assets/pfpIcon.png",
    "Taco Bell",
    "Love this place with alll my heart oml thisd place is the best ting to ever ha[pp[en to the UTD campus ongodd no capulations my fam",
    "Alcoholic Baja Blast",
    "The only thing you should order here"
  );
}

document.querySelector("#reviewTable tbody").innerHTML = myArr
  .map(
    (Review) =>
      `<tr><td>${Review.name}</td><td><img src=${Review.pfp} style="width: 50px; height: 50px"></td><td>${Review.location}</td><td>${Review.review}</td><td>${Review.favItem}</td><td>${Review.favItemComment}</td></tr>`
  )
  .join("");
