

import axios from 'axios';
import { getApiUrl } from './configService';


const apiClient = axios.create({
  baseURL: getApiUrl(),  // Use the API URL from config service
  headers: {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${localStorage.getItem('token')}`, // Use API key from config service
  },
}); 

  // Register User
  export const createaccount = async ({ email, password, name })=> {
    try {
      const response = await apiClient.post('/auth/register', { email, password, name });
      console.log('User registered:', response.data);
      localStorage.setItem('name', response.data.user.name); // Store token in local storage
      console.log('User name:', response.data.user.name);
      return response.data;
    } catch (err) {
      console.error('Registration error:', err.response?.data || err);
      throw err;
    }
  }

  // Login User
  export const login = async ({ email, password })=> {

    try {
      const response = await apiClient.post('auth/login', { email, password });
      const { access_token } = response.data;
      console.log('Login response:', response.data);
      localStorage.setItem('token', access_token); // Store token in local storage
      console.log('User logged in:', access_token);
      return access_token;
    } catch (err) {
      console.error('Login error:', err.response?.data || err);
      throw err;
    }
  }

  
  // Get User Info
  export const getuser = async (dispatch)=> {
    try {
      const token = localStorage.getItem('token');
      const response = await apiClient.get('/user', {
        headers: { Authorization: `Bearer ${token}` },
      });
      return response.data;
    } catch (err) {
      console.error('Get user error:', err.response?.data || err);
      throw err; 
    }
  }

  // Logout User
  export const logout = async () =>{
    try {
      localStorage.removeItem('token'); // Remove token from local storage
      console.log('User logged out');
    } catch (err) {
      console.error('Logout error:', err);
      throw err;
    }
  }
  export const addToWishlist = async({Product_id,User_id})=>{
    try{
      const response = await apiClient.post('/wishlist',{Product_id,User_id})
      const { access_token } = response.data;
      console.log('Login response:', response.data);
      localStorage.setItem('token', access_token); // Store token in local storage
      console.log('User logged in:', access_token);
      return access_token;
    }catch(err){
      console.error('can not wishlist product',err);
      throw err;
    }
  }



  

export default apiClient;

