export const GET_ALL_MEAL = 'GET_ALL_MEAL';
export const SAVE_ALL_MEAL = 'SAVE_ALL_MEAL';


export const getAllMeal = () => ({
  type: GET_ALL_MEAL,
});

export const saveAllMeal = (meal) => ({
  type: SAVE_ALL_MEAL,
  meal,
});
