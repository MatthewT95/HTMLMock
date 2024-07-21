let generationSettings = {
  primarlyMode: "normal",
  secondaryMode: "paragraphs",
  sentenceCount: 5,
  paragraphCount: 3,
  paragraphMinLength: 4,
  paragraphMaxLength: 8,
  sentenceMinLength: 6,
  sentenceMaxLength: 11,
  itemCount: 6,
  headerLevel: 1,
  tableRowCount: 3,
  tableColumnCount: 3,
  tableHeadersOn: true,
  imageWidth: 300,
  imageHeight: 200,
  imagesCount: 3,
};
let webPreviewMode = true;

// Elements references
let outputElement = document.getElementById("content");
let interface = document.getElementById("interface");
let btnRegenerate = document.getElementById("btnRegenerate");
let btnAppend = document.getElementById("btnAppend");
let btnPrepend = document.getElementById("btnPrepend");
let selGenerationMode = document.getElementById("selGenerationMode");
let selGenerationSubMode = document.getElementById("selGenerationSubMode");
let subModesSelects = document.querySelectorAll(
  "#interface #divGenerationSubMode select"
);
let inputParagraphCount = document.querySelector(
  "#interface #numParagraphCount"
);
let inputSentenceCount = document.querySelector("#interface #numSentenceCount");
let inputParagraphMinLength = document.querySelector(
  "#interface #numParagraphMinLength"
);
let inputParagraphMaxLength = document.querySelector(
  "#interface #numParagraphMaxLength"
);

let inputSentenceMinLength = document.querySelector(
  "#interface #numSentenceMinLength"
);
let inputSentenceMaxLength = document.querySelector(
  "#interface #numSentenceMaxLength"
);
inputImageCount = document.querySelector("#interface #numImageCount");
let inputImageWidth = document.querySelector("#interface #numImageWidth");
let inputImageHeight = document.querySelector("#interface #numImageHeight");
let inputItemCount = document.querySelector("#interface #numItemCount");
let inputHeaderLevel = document.querySelector("#interface #numHeaderLevel");
let inputTblColumns = document.querySelector("#interface #numTblColumns");
let inputTblRows = document.querySelector("#interface #numTblRows");
let inputHeadersEnabled = document.querySelector(
  "#interface #chkTableHeadersEnabled"
);
// Functions

function toggleLightMode() {
  document.getElementById("content").classList.toggle("lightMode");
}

function loadDefaultSettingsUI() {
  let {
    primarlyMode,
    secondaryMode: SecondaryMode,
    paragraphCount,
    sentenceCount,
    paragraphMinLength,
    paragraphMaxLength,
    sentenceMinLength,
    sentenceMaxLength,
    tableRowCount,
    tableColumnCount,
    tableHeadersOn,
    itemCount,
    headerLevel,
    imageWidth,
    imageHeight,
    imagesCount,
  } = generationSettings;
  // Load default settings into UI
  inputParagraphCount.value = paragraphCount;
  inputSentenceCount.value = sentenceCount;
  inputParagraphMinLength.value = paragraphMinLength;
  inputParagraphMaxLength.value = paragraphMaxLength;
  inputSentenceMinLength.value = sentenceMinLength;
  inputSentenceMaxLength.value = sentenceMaxLength;
  inputItemCount.value = itemCount;
  inputHeaderLevel.value = headerLevel;
  inputTblColumns.value = tableColumnCount;
  inputTblRows.value = tableRowCount;
  inputHeadersEnabled.checked = tableHeadersOn;
  inputImageWidth.value = imageWidth;
  inputImageHeight.value = imageHeight;
  inputImageCount.value = imagesCount;
  selGenerationMode.value = primarlyMode;
  selGenerationSubMode.value = SecondaryMode;
}

function detectSettingsFromUI() {
  generationSettings.paragraphCount = inputParagraphCount.value;
  generationSettings.sentenceCount = inputSentenceCount.value;
  generationSettings.paragraphMinLength = inputParagraphMinLength.value;
  generationSettings.paragraphMaxLength = inputParagraphMaxLength.value;
  generationSettings.sentenceMinLength = inputSentenceMinLength.value;
  generationSettings.sentenceMaxLength = inputSentenceMaxLength.value;
  generationSettings.itemCount = inputItemCount.value;
  generationSettings.headerLevel = inputHeaderLevel.value;
  generationSettings.tableColumnCount = inputTblColumns.value;
  generationSettings.tableRowCount = inputTblRows.value;
  generationSettings.tableHeadersOn = inputHeadersEnabled.checked;
  generationSettings.imageWidth = inputImageWidth.value;
  generationSettings.imageHeight = inputImageHeight.value;
  generationSettings.imagesCount = inputImageCount.value;
  generationSettings.primarlyMode = selGenerationMode.value;
  generationSettings.secondaryMode = selGenerationSubMode.value;
  interface.dataset.genMode = generationSettings.primarlyMode;
  interface.dataset.genSubMode = generationSettings.secondaryMode;
}

function regenerateContent(mode = "u") {
  let webPreviewModeHistory = webPreviewMode;
  let { primarlyMode, secondaryMode: SecondaryMode } = generationSettings;
  if (!webPreviewMode) {
    toggleFormat();
  }

  let HTMLContent = "";

  // Normal generation mode clause
  if (primarlyMode == "normal") {
    if (SecondaryMode == "paragraphs") {
      let { paragraphCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [paragraphCount],
        [["p"]],
        [{ inner: "p" }],
        generationSettings
      );
    } else if (SecondaryMode == "sentences") {
      let { sentenceCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [1, sentenceCount],
        [["p"], []],
        [{}, { inner: "s" }],
        generationSettings
      );
    }
  }
  // List generation mode clause
  else if (primarlyMode == "list") {
    if (SecondaryMode == "ol-s") {
      let { itemCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [1, itemCount],
        [["ol"], ["li"]],
        [{}, { inner: "s" }],
        generationSettings
      );
    } else if (SecondaryMode == "ul-s") {
      let { itemCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [1, itemCount],
        [["ul"], ["li"]],
        [{}, { inner: "s" }],
        generationSettings
      );
    } else if (SecondaryMode == "ol-p") {
      let { itemCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [1, itemCount],
        [["ol"], ["li", "p"]],
        [{}, { inner: "p" }],
        generationSettings
      );
    } else if (SecondaryMode == "ul-p") {
      let { itemCount } = generationSettings;
      HTMLContent = generateFakeHTMLContent(
        [1, itemCount],
        [["ul"], ["li", "p"]],
        [{}, { inner: "p" }],
        generationSettings
      );
    }
  }
  // Header generation mode clause
  else if (primarlyMode == "header") {
    let { headerLevel } = generationSettings;
    HTMLContent = generateFakeHTMLContent(
      [1],
      [["h" + headerLevel]],
      [{ inner: "s" }],
      generationSettings
    );
  } // Table generation mode clause
  else if (primarlyMode == "table") {
    HTMLContent = generateFakeHTMLTable(generationSettings);
  } else if (primarlyMode == "image") {
    let targetDomain = window.location.hostname;
    if (SecondaryMode == "image-single") {
      let { imageWidth, imageHeight } = generationSettings;
      let seed = getRandomIntInclusive(0, 50000);
      HTMLContent =
        "<img src='http://" + targetDomain + "/modules/place-holder-image-2.0/?seed=" +
        seed +
        "&width=" +
        imageWidth +
        "&height=" +
        imageHeight +
        "'/>";
    } else if (SecondaryMode == "image-set") {
      let { imageHeight, imageWidth, imagesCount } = generationSettings;
      HTMLContent += "<div class='image-container'>";
      for (let i = 0; i < imagesCount; i++) {
        let seed = getRandomIntInclusive(0, 50000);
        HTMLContent +=
          "<img src='http://" + targetDomain + "/modules/place-holder-image-2.0/?seed=" +
          seed +
          "&width=" +
          imageWidth +
          "&height=" +
          imageHeight +
          "'/>";
      }
      HTMLContent += "</div>";
    }
  }

  // Inject content
  if (mode == "u") {
    outputElement.innerHTML = HTMLContent;
  } else if (mode == "a") {
    outputElement.innerHTML += HTMLContent;
  } else if (mode == "p") {
    outputElement.innerHTML = HTMLContent + outputElement.innerHTML;
  }

  if (!webPreviewModeHistory) {
    toggleFormat();
  }
}

function toggleFormat() {
  if (!webPreviewMode) {
    let htmlVersion = outputElement
      .getElementsByTagName("code")[0]
      .innerHTML.toString();
    htmlVersion = htmlVersion
      .replaceAll("&gt;<br>&lt;", "&gt;&lt;")
      .replaceAll("&lt;", "<")
      .replaceAll("&gt;", ">");
    outputElement.innerHTML = htmlVersion;
    webPreviewMode = true;
  } else {
    let HTMLRawVersion = outputElement.innerHTML.toString();
    HTMLRawVersion = HTMLRawVersion.replaceAll("<", "&lt;")
      .replaceAll(">", "&gt;")
      .replaceAll("&gt;&lt;", "&gt;<br>&lt;");
    outputElement.innerHTML = "<code>" + HTMLRawVersion + "</code>";
    webPreviewMode = false;
  }

  if (webPreviewMode) {
    document.getElementById("btnToggleFormat").innerText = "Show HTML";
  } else {
    document.getElementById("btnToggleFormat").innerText = "Web Preview";
  }
}

btnRegenerate.addEventListener("click", () => regenerateContent("u"));
btnAppend.addEventListener("click", () => regenerateContent("a"));
btnPrepend.addEventListener("click", () => regenerateContent("p"));

// Intervals
setInterval(detectSettingsFromUI, 250);

// Initial setup
regenerateContent("u");
loadDefaultSettingsUI();
