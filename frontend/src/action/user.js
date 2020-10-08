export const FIELD_VALUE = 'FIELD_VALUE';

export const fieldValue = (newValue, inputName) => ({
  type: FIELD_VALUE,
  newValue,
  inputName,
});
