<h1>New Log!</h1>
<section id="newlog-header">
    <form id="newlog-form" action="/php/pages/createlog.php">
        <label for="plantname">*Plant Name:</label><br>
        <input type="text" id="plant-name" name="plantname" required><br>
        <label for="log-date-time">Date:</label><br>
        <input type="datetime-local" id="log-date-time" name="log-date-time" /><br>
        <label>Did you Fertilize?</label><br>
        <input type="radio" id="fertilize-yes" name="did-fertilize" value="true">
        <label for="fertilize-yes">Yes</label>
        <input type="radio" id="fertilize-no" name="did-fertilize" value="false" checked="checked">
        <label for="fertilize-no">No</label><br>
        <div id="fertilizer-form"><!-- Hidden form revealed if yes radio button is clicked -->
            <label for="fertilizer-used">Fertilizer Used:</label><br>
            <input type="text" id="fertilizer-used">
            <label for="fertilizer-weight">Fertilizer Weight (Grams):</label>
            <input type="number" step="0.1" id="fertilizer-weight" min="0">
            <label for="npk">NPK</label>
            <span>N:</span>
            <input type="number" step="0.1" id="fertilizer-weight" min="0">
            <span>P:</span>
            <input type="number" step="0.1" id="fertilizer-weight" min="0">
            <span>K:</span>
            <input type="number" step="0.1" id="fertilizer-weight" min="0">
        </div>
        <label>Problems</label><!-- Problems Form -->
        <label for="problem-name">Name</label>
        <input type="text" name="problem-name" id="problem-name">
        <label>Is It Treatable?</label><br>
        <input type="radio" id="treatable-yes" name="treatable" value="true">
        <label for="yes">Yes</label>
        <input type="radio" id="treatable-no" name="treatable" value="false">
        <label for="no">No</label><br>
        <label for="research:">Research</label>
        <textarea name="research" id="research"></textarea>
        <label for="treatments-tried">Treatements Tried:</label>
        <textarea id="treatments-tried" name="treatments-tried"></textarea>
        <label for="treatments-found">Treatements Found:</label>
        <textarea id="treatments-found" name="treatments-found"></textarea>
        <label for="images">Upload Images:</label>
        <input type="file" id="images" name="images" multiple="multiple">
        <button type="submit">Create Log</button>
    </form>
</section>