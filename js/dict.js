deepai.setApiKey("quickstart-QUdJIGlzIGNvbWluZy4uLi4K");

const form = document.querySelector("form");
const outputDiv = document.getElementById("output");

form.addEventListener("submit", async (event) => {
  event.preventDefault();
  const wordInput = document.getElementById("word");
  const word = wordInput.value;
  wordInput.value = "";

  try {
    const resp = await deepai.callStandardApi("ai-word-definition", {
      text: word,
    });
    outputDiv.textContent = resp.output;
  } catch (error) {
    console.error(error);
    outputDiv.textContent =
      "An error occurred while getting the definition. Please try again later.";
  }
});
