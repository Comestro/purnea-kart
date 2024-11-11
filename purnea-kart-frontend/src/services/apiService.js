// src/services/apiService.js
import axios from 'axios';
import { getApiUrl } from './configService';


const apiClient = axios.create({
  baseURL: getApiUrl(),  // Use the API URL from config service
  headers: {
   'Content-Type': 'application/json',
   'Authorization': `Bearer ${getApiKey()}`, // Use API key from config service
   },
});



export const fetchProducts = async () => {
  
  try {
    const response = await apiClient.get(`/products`);
    return response.data;
  } catch (error) {
    console.error('Failed to fetch products:', error);
    throw error;
  }
};export const fetchProduct = async (slug) => {
  
  try {
    const response = await apiClient.get(`/products/${slug}`);
    return response.data;
  } catch (error) {
    console.error('Failed to fetch products:', error);
    throw error;
  }
};

export const fetchBrands = async ()=>{
  try{
     const response = await apiClient.get("/brands");
     return response.data;
  }catch (error){
    console.error('Failed to fetch brands:', error);
    throw error;
  }
}

export const fetchCategories = async ()=>{
  try{
     const response = await apiClient.get("/categories");
     return response.data;
  }catch (error){
    console.error('Failed to fetch categories:', error);
    throw error;
  }
}

export const fetchWishlist = async ()=>{
  try{
     const response = await apiClient.get("/wishlist");
     return response.data;
  }catch (error){
    console.error('Failed to fetch wishlist:', error);
    throw error;
  }
}



export default apiClient;












// Request Interceptor
// apiClient.interceptors.request.use(
//   (config) => {
//     console.log('Request:', config);
//     return config;
//   },
//   (error) => Promise.reject(error)
// );

// // Response Interceptor
// apiClient.interceptors.response.use(
//   (response) => response,
//   (error) => {
//     console.error('Error in response:', error);
//     return Promise.reject(error);
//   }
// );
