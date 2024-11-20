


document.addEventListener("DOMContentLoaded", function() {
  fetch("getReview.php")
    .then(response => response.json())
    .then(reviews => {
      const tableBody = document.querySelector("#reviewTable tbody");
      tableBody.innerHTML = reviews
        .map(review => {
          return `
            <tr>
              <td>${review.Username}</td>
              <td>${review.Rev_id}</td>
              <td>${review.Res_name}</td>
              <td>${review.Rev_comment}</td>
              <td>${review.Fav_item}</td>
              <td>${review.I_comment}</td>
            </tr>`;
        })
        .join("");
    })
    .catch(error => console.error("Error fetching reviews:", error));
})

plusButton.addEventListener("click", function () {
  addReview.classList.add("show");
});
closePopup.addEventListener("click", function () {
  addReview.classList.remove("show");
});

window.addEventListener("click", function (event) {
  if (event.target == addReview) {
    addReview.classList.remove("show");
  }
});
