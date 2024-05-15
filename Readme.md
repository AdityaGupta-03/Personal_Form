# Personal_Form

Used HTML5 attributes rather than using JS to handle the form handlings :
- Method POST - Posting the details to the database.
- Action "filename" - to which file you have to submit the details.
- In PHP we capture the input fields with the help of **Name** and **Value** attributes.
- **ID** attribute of the field is helpful in JS for targetting the field.
- To show the example text in the backgorund of input field then insert value in **placeholder** attribute.
- To have prefilled value in the input field we insert value in **Value** attribute.
- for input type "tel": pattern="[0-9]{10}" regex is used so that only 10 numbers will be considered as valid input.
- for input type "password" : pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" regex is used to meet the required specifications:
    1. Contains at least one digit (0-9)
    2. Contains at least one lowercase letter (a-z)
    3. Contains at least one uppercase letter (A-Z)
    4. Is at least 8 characters long 
- In the Zip Code : Title Attribute is used to display the text when you hover on the input field.
- pattern="[0-9]{6}" : to enter only 6 digit code in zip field input
- To make input field required - **required** keyword is used.

------

- Input type : 
    1. **text** - single-line text input field where users can enter text.
    2. **textarea** - creates a multi-line text input area for longer text input.
    3. **email** - creates a text input field optimized for entering an email address.
    4. **password** -  the entered text is masked (hidden) for security.
    5. **hidden** - used to store data that should not be visible to the user but needs to be sent along with the form submission.
    6. **tel** -  creates a text input field optimized for entering a telephone number.
    7. **radio** - users can select only one option from a group, therefore all the name attributes should be same.
    8. **checkbox** - allows users to select multiple options, therefore either give distinct name to each checkbox field or use array[] name.
    9. **file** - allows users to upload files.
    10. **date** - allows user to select a date. 
    11. **image** - used for submitting forms with an image as the submit button.
    12. **color** -  creates a color picker control for selecting a color.
    13. **range** - creates a slider control for selecting a numeric value within a specified range.
    14. **time** - It allows users to input a time value using either a text input field or a time picker.
    15. **url** -  creates a text input field optimized for entering a URL.
    16. **search** - creates a text input field optimized for search queries.
    17. **submit** - When clicked, it triggers the form submission, sending the form data to the server specified in the form's action attribute.
    18. **reset** - it resets all form fields to their default values specified in the HTML.

- ``` HTML
    <form method="POST" action="process_form.php">
        <input type="hidden" name="hiddenField" value="hiddenValue">
        <button type="submit">Submit</button>
    </form>
    ```
    - When the form is submitted, the hidden input field hiddenField with the value hiddenValue will be included in the form data. However, the user will not see this input field on the webpage because it's hidden.

- ``` HTML 
    <input type="number" name="quantity" min="1" max="100" step="1">
    ```
    - This creates a numeric input field where users can enter numbers within a specified range.

- **Datalist and Select option** :
    1. Both are used for creating dropdown lists.
    2. **Datalist** - to Provide auto complete suggestions
        - allows users to select one of them while _typing_ input field.
        - It provides autocomplete functionality and suggestions will appear.
        - User can select one option at a time.
    3. **Select** - Create dropdown list of options for user selection.
        - Users can select one or more items.
        - Users can see all options by clicking on the dropdown arrow.
        - Supports both single and multiple option selection and value gets submitted to the data.

