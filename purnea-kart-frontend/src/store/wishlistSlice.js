import { createSlice } from "@reduxjs/toolkit";


const wishlistSlice = createSlice({
    name: 'wishlist',
    initialState: {
        items: [],
    },

 reducers:{
   addToWishlist:(state,action)=>{
      const item = action.payload;
      const exists = state.items.find((products)=>products.id === item.id)
      if(!exists){
        state.items.push(item);
      }
    },
   removeFromWishlist:(state,action)=>{
    const itmeId = action.payload;
    state.items = state.items.filter((products)=>products.id === itmeId)
   },
 }
})

export const { addToWishlist, removeFromWishlist } = wishlistSlice.actions;
export default wishlistSlice.reducer;