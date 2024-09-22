<h1 style="text-align: center;">New Log</h1>
<section id="newlog-header">
    <form id="newlog-form" method="post" action="/php/pages/createlog.php" enctype="multipart/form-data">
        <label for="plantname">*Plant Name:</label><br>
        <input type="text" id="plant-name" name="plantname" required><br>
        <label for="log-date-time">Date:</label><br>
        <input type="datetime-local" id="log-date-time" name="log-date-time"/><br>
        <h1>Fertilizer</h1>
        <label>Did you Fertilize?</label><br>
        <input type="radio" id="fertilize-yes" name="did-fertilize" value="true">
        <label for="fertilize-yes">Yes</label>
        <input type="radio" id="fertilize-no" name="did-fertilize" value="false" checked="checked">
        <label for="fertilize-no">No</label><br>
        <div id="fertilizer-form"><!-- Hidden form revealed if yes radio button is clicked -->
            <label for="fertilizer-used">Fertilizer Used:</label><br>
            <input type="text" id="fertilizer-used" name="fertilizer-used">
            <label for="fertilizer-weight">Fertilizer Weight (Grams):</label>
            <input type="number" step="0.1" id="fertilizer-weight" name="fertilizer-weight" min="0" value="0.0">
            <h3>NPK</h3>
            <span>N:</span>
            <input type="number" step="0.1" id="fertilizer-n" name="fertilizer-n" min="0" value="0">
            <span>P:</span>
            <input type="number" step="0.1" id="fertilizer-p" name="fertilizer-p" min="0" value="0">
            <span>K:</span>
            <input type="number" step="0.1" id="fertilizer-k" name="fertilizer-k" min="0" value="0">
        </div>
        <h1>Problems</h1><!-- Problems Form -->
        <label for="problem-name">Name</label>
        <input type="text" id="problem-name" name="problem-name">
        <label>Is It Treatable?</label><br>
        <input type="radio" id="treatable-yes" name="treatable" value="true">
        <label for="yes">Yes</label>
        <input type="radio" id="treatable-no" name="treatable" value="false">
        <label for="no">No</label><br>
        <label for="treatments-tried">Treatements Tried:</label>
        <textarea id="treatments-tried" name="treatments-tried" default="Treatments that I have tried"></textarea>
        <label for="treatments-found">Treatements Found:</label>
        <textarea id="treatments-found" name="treatments-found"></textarea>
        <h1>Notes</h1>
        <label for="research:">Research</label><!-- Research on the plant not a particular disease or problem but could include such things -->
        <textarea id="research" name="research"></textarea>
        <label>Is the plant flowering?</label><br>
        <input type="radio" id="flowering-yes" name="is-flowering" value="true">
        <label for="fertilize-yes">Yes</label>
        <input type="radio" id="flowering-no" name="is-flowering" value="false" checked="checked"><br>
        <label>Is the plant fruiting?</label><br>
        <input type="radio" id="fruiting-yes" name="is-fruiting" value="true">
        <label for="fruiting-yes">Yes</label>
        <input type="radio" id="fruiting-no" name="is-fruiting" value="false" checked="checked">
        <label for="fruiting-no">No</label><br>
        <label for="number-of-fruits">How many fruits?</label>
        <input type="number" id="number-of-fruits" name="number-of-fruits" min="0" value="0">
        <label for="images">Upload Images:</label>
        <input type="file" id="images" name="images[]" accept="image/*" multiple><!-- We still need file verification. -->
        <button type="submit">Create Log</button>
    </form>
</section>