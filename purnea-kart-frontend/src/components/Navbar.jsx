// Navbar.jsx
import React from "react";
import { IoSearchOutline } from "react-icons/io5";

const Navbar = ({ links, variant }) => {
  return (
    <nav
      className={` ${
        variant === "light" ? "bg-white text-black" : "bg-blue-600 text-white"
      }`}
    >
      <ul className="flex items-center justify-between px-36 py-1">
         <div className="text-lg font-semibold">Logo</div>
         <div className="hidden md:flex items-center w-[50%] relative">
                        <IoSearchOutline  className='w-5 h-5 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2'/>
                        <input 
                        className='bg-slate-100 w-full rounded-none pl-10 pr-4 py-1 m-1 border-none'
                        type="search"
                        placeholder='search for Products, Brand and More' />
         </div>
         {links.map((link, index) => (
          <li key={index}>
            <a
              href={link.href}
              className=""
            >
              {link.label}
            </a>
          </li>
        ))}
      </ul>
      
    </nav>
  );
};

export default Navbar;
