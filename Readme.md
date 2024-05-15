# Personal_Form

Used HTML5 attributes rather than using JS to handle the form handlings :
- Method POST - Submitting the details to the database.
- Action "filename" - to which file you have to submit the details.
- In PHP we capture the input fields with the help of *Name* and *Value* attributes.
- *ID* attribute of the field is helpful in JS for targetting the field.
- If we insert value in *placeholder* attribute then value is shown in background.
- If we insert value in *Value* attribute then form is already gets filled with that value.
- for input type "tel": pattern="[0-9]{10}" regex is used so that only 10 numbers will be considered as valid input.
- for input type "password" : pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" regex is used to meet the required specifications:
    1. Contains at least one digit (0-9)
    2. Contains at least one lowercase letter (a-z)
    3. Contains at least one uppercase letter (A-Z)
    4. Is at least 8 characters long 
- In the Zip Code : Title Attribute is used to display the text when you hover on the input field.
- pattern="[0-9]{6}" : to enter only 6 digit code in zip field input
- To make input field required - *required* keyword is used.
- Input type : 
    1. text - single-line text input field where users can enter text.
    2. textarea - creates a multi-line text input area for longer text input.
    3. email - creates a text input field optimized for entering an email address.
    4. password -  the entered text is masked (hidden) for security.
    5. tel -  creates a text input field optimized for entering a telephone number.
    6. radio - users can select only one option from a group, therefore all the name attributes should be same.
    7. checkbox - allows users to select multiple options, therefore either give distinct name to each checkbox field or use array[] name.
    8. file - allows users to upload files.
    9. date - allos user to select a date.

- <input type="number" name="quantity" min="1" max="100" step="1">
    -- This creates a numeric input field where users can enter numbers within a specified range.

- difference in datalist and select/option :
    1. 
    2. 
    3. 

