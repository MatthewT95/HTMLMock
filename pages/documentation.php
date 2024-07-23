<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/all.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/multilevel-select.css">
    <link rel="stylesheet" href="../styles/documentation.css">
    <script defer src="../scripts/multilevel-select.js"></script>
    <script defer src="../scripts/documentation.js"></script>
    <title>Documentation</title>
</head>

<body>
    <header class="page-header">
        <h1>Pseudocontent generator documentation</h1>
        <?php include("../includes/nav.php")?>
    </header>
    <div class="documentation" data-level1="UI">
        <div class="doc-nav">
            <select id="doc-nav-l1" class="ml-sel-parent">
                <option value="UI">User Interface</option>
                <option value="GenModes">Generation Modes</option>
                <option value="GenSettings">Generation settings</option>
            </select>
            <select id="doc-nav-l2" class="ml-sel-collapse ml-sel-parent">
                <option data-filter-value="GenModes" value="normal">Normal</option>
                <option data-filter-value="GenModes" value="list">List</option>
                <option data-filter-value="GenModes" value="table">Table</option>
                <option data-filter-value="GenModes" value="header">Header</option>
                <option data-filter-value="GenModes" value="image">Image</option>
            </select>
        </div>
        <section class="user-interface-doc">
            <h2>User Interface</h2>
            <img src="../images/UserInterface.PNG" alt="Picture of pseudocontent generator's user interface.">
            <h3>Regenerate button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will replace the content in the
                content area.
            </p>
            <h3>Append button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will be appended to the content in the
                content area.
            </p>
            <h3>Prepend button</h3>
            <p>
                When this button is clicked the app will generate content according the generation mode
                and generations settings. The generated content will be prepended to the content in the
                content area.
            </p>
            <h3>Web preview/show HTML button</h3>
            <p>
                This button which displays text according to what will happen when it is pressed.
                It allows the user to toggle between seeing the content as it would appear on a
                web page or seeing the raw HTML.
            </p>
            <h3>Toggle Theme button</h3>
            <p>
                This button allows the user to toggle the color theme of content area which
                defaults to dark mode.
            </p>
        </section>
        <section class="generation-modes-doc">
            <section class="normal-mode-doc">
                <h2 id="header-normal">Normal</h2>
                <p>
                    In this mode the generator will produce plain content in form of paragraphs
                    and sentences.
                </p>
                <div class="docSectionNavBtns">
                    <button class="btnNavParagraph btnDocNav" data-jump-point="#header-paragraph">Goto
                        paragraph</button>
                    <button class="btnNavSentence btnDocNav" data-jump-point="#header-sentence">Goto sentence</button>
                </div>
                <?php include("./doc.normal.paragraph.php") ?>
                <?php include("./doc.normal.sentence.php") ?>
            </section>
            <section class="list-mode-doc">
                <h2 id="header-list">List</h2>
                <p>
                    This mode allows the user to generate a list of items. The list can be made up of Sentences
                    or paragraphs. The list can be both an unorder and ordered list.
                </p>
                <div class="docSectionNavBtns">
                    <button class="btnNavOl-S btnDocNav" data-jump-point="#header-ol-s">Goto ol-s</button>
                    <button class="btnNavUl-s btnDocNav" data-jump-point="#header-ul-s">Goto ul-s</button>
                    <button class="btnNavOl-p btnDocNav" data-jump-point="#header-ol-p">Goto ol-p</button>
                    <button class="btnNavUl-p btnDocNav" data-jump-point="#header-ul-p">Goto ul-p</button>
                </div>
                <?php include("./doc.list.ol-s.php") ?>
                <?php include("./doc.list.ul-s.php") ?>
                <?php include("./doc.list.ol-p.php") ?>
                <?php include("./doc.list.ul-p.php") ?>
            </section>
            <section class="table-mode-doc">
                table
            </section>
            <section class="header-mode-doc">
                header
            </section>
            <section class="image-mode-doc">
                image
            </section>
        </section>
    </div>
</body>

</html>