
import React, { useEffect, useState , useRef} from 'react'
import Container from '../container/container'
import {Logo,Menu, Button, Login} from '../Index'
import { Link } from 'react-router-dom'
import { getuser, logout } from '../../services/authService'
import { IoSearchOutline } from "react-icons/io5";
import { LuUserCircle2 } from "react-icons/lu";
import { BsCart3 } from "react-icons/bs";
import { PiStorefront } from "react-icons/pi";

function Header() {
    const [user, setUser] = useState(null);
    const [dropdownOpen, setDropdownOpen] = useState(false);
    const dropdownRef = useRef(null);


    useEffect(() => {
        const fetchUser = async () => {
            try {
                const user = await getuser();
                setUser(user.user);
            } catch (error) {
                console.error('Error fetching user:', error);
            }
        };

        fetchUser();
    }, []);

    const handleClickOutside = (event) => {
        if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
          setDropdownOpen(false);
        }
      };

    useEffect(() => {
        document.addEventListener("mousedown", handleClickOutside);
        return () => {
          document.removeEventListener("mousedown", handleClickOutside);
        };
      }, []);

      const toggleDropdown = () => {
        setDropdownOpen(!dropdownOpen);
      };
      
      
      const handleLogout = () => {
        const fetchUser = async () => {
            try {
                const user = await logout();
            } catch (error) {
                console.error('Error fetching user:', error);
            }
        };

        fetchUser();
        setDropdownOpen(false);
        window.location.reload(false);
      };
    


  return (
    <Container>
        <header>
            <nav className='w-full bg-white color-black'>
                <div className='flex justify-between  px-8 '>
                   <div className='max-w-7xl mx-auto flex items-center justify-between'>
                        {/* <Link to='/home'> */}
                        <Logo/>
                        {/* </Link> */}
                    </div> 
                    <div className="hidden md:flex items-center w-[50%] relative">
                       
                        <input 
                        className='bg-slate-100 w-full rounded-lg pl-10 pr-4 py-2 border-none'
                        type="search"
                        placeholder='search for Products, Brand and More' />
                         <IoSearchOutline  className='w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2'/>
                    </div>
                    <div className=' flex items-center space-x-10'>
                        <div ref={dropdownRef} className="relative inline-block text-left">
                            <button onClick={toggleDropdown} className="flex items-center px-4 py-2 text-black">
                                {user ? user.name : <div className='flex items-center gap-2'><LuUserCircle2/> Login</div>}
                                <svg className="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.938l3.71-3.748a.75.75 0 011.08 1.04l-4.25 4.293a.75.75 0 01-1.08 0l-4.25-4.293a.75.75 0 01-.02-1.06z" clipRule="evenodd" />
                                </svg>
                            </button>

                            {dropdownOpen && (
                                <div className="absolute right-0 mt-2 w-48 origin-top-right bg-white border border-gray-200 rounded shadow-lg">
                                {user ? (
                                    <>
                                    <a href="#profile" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                                    <a href="#orders" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Orders</a>
                                    <Link to={'/wishlist'} className='block px-4 py-2 text-gray-700 hover:bg-gray-100'> Wishlist</Link>
                                    <button onClick={handleLogout} className="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                                    {/* <Link to="/home"  className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</Link> */}
                                    </>
                                    
                                ) : (
                                    <>
                                    <Link to="/login" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</Link>
                                    {/* <button onClick={handleLogin} className="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Login</button> */}
                                    <Link to="/signup" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sign Up</Link>
                                    </>
                                )}
                            </div>
                            )}
                        </div>
                         <div>
                            <Link to={'/cart'}>
                                <button className='flex space-x-2 items-center'>
                                <BsCart3 />
                                <p>Cart</p>
                                </button>
                                </Link>
                        </div>
                        <div>
                            <Link to={'/seller'}>
                                <button className='flex space-x-2 items-center'>
                                <PiStorefront />
                                <p>Become a Seller</p> 
                                </button>
                            </Link>
                        </div>
                        <div className='menu-icon'>
                            <Menu/>
                    </div>
                 
                </div>


              </div>
            </nav>
        </header>
     </Container>
  )
}

export default Header