import { getApiUrl } from './configService';
import axios from 'axios';


class Auth {
  constructor() {
    this.api = axios.create({
      baseURL: getApiUrl(),
    });
  }

  // Register User
  async register({ email, password, name }) {
    try {
      const response = await this.api.post('/register', { email, password, name });
      console.log('User registered:', response.data);
      return response.data;
    } catch (err) {
      console.error('Registration error:', err.response?.data || err);
      throw err;
    }
  }

  // Login User
  async login({ email, password }) {
    try {
      const response = await this.api.post('/login', { email, password });
      const { token } = response.data;
      localStorage.setItem('token', token); // Store token in local storage
      console.log('User logged in:', token);
      return token;
    } catch (err) {
      console.error('Login error:', err.response?.data || err);
      throw err;
    }
  }

  // Get User Info
  async getUser() {
    try {
      const token = localStorage.getItem('token');
      const response = await this.api.get('/user', {
        headers: { Authorization: token },
      });
      console.log('User data:', response.data);
      return response.data;
    } catch (err) {
      console.error('Get user error:', err.response?.data || err);
      throw err;
    }
  }

  // Logout User
  async logout() {
    try {
      localStorage.removeItem('token'); // Remove token from local storage
      console.log('User logged out');
    } catch (err) {
      console.error('Logout error:', err);
      throw err;
    }
  }
}

const auth = new Auth();
export default auth;
