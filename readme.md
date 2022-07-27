# BladeQuestions

_Laravel Blade Components for Quickly making forms_

## License

BladeQuestions is released under the MIT Open Source License, <https://opensource.org/licenses/MIT>

## Examples

```html
<x-questions-input label="Owner" :parent="$settings" placeholder="username"></x-questions-input>

<x-question-select label="Status" :options="[1 => 'Stock', 2 => 'Distribution']" selected="1"></x-question-select>

<x-question-checkbox :choices="[1=>'Distribution', 2=>'Stock']" label="Status"></x-question-checkbox>

<x-questions.radio :choices="[1=>'Yes', 0=>'No']" :parent="$settings" label="Calculate Formulas (optional)" name="calculate_formulas" tooltip="Pre-calculation of formulas in non-text file spreadsheets"></x-questions.radio>
```