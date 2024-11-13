import React, { useState,useEffect } from 'react';
import Navbar from '../Navbar';
import {fetchWishlist} from '../../services/apiService'

function Wishlist() {
    const [wishlist, setWishlist] = useState([]);
    const [error,setError]= useState('true');
    const [loading,setLoading]= useState('null')
    
    useEffect(()=>{
        const loadWishlist = async () => {
           try{
              const data = await fetchWishlist();
              setWishlist(data.categories)
              setLoading(false)
           }catch(err){
             setError(error)
             setLoading(false)
           }
        }
        loadWishlist();
    },[])
    

  // Handle removing an item from wishlist
  const removeFromWishlist = (id) => {
    setWishlist(wishlist.filter((item) => item.id !== id));
  };

  // Handle adding an item to the cart
  const addToCart = (item) => {
    console.log(`Added ${item.name} to cart`);
    removeFromWishlist(item.id); // Optionally remove item from wishlist
  };

  return (
    <div className=" bg-gray-100 ">
      <nav>
        <Navbar
            links={[
              { label: "MyAccount", href: "/" },
              { label: "Become a Seller", href: "/seller" },
              { label: "more", href: "/contact" },
              { label: "cart", href: "/cart" },
            ]}
            variant="dark"
        />
     </nav>
      <h2 className="text-2xl font-bold text-gray-800 mb-6">My Wishlist</h2>

      {wishlist.length === 0 ? (
        <p className="text-gray-600">Your wishlist is empty.</p>
      ) : (
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {wishlist.map((item) => (
            <div key={item.id} className="bg-white shadow rounded-lg overflow-hidden">
              {/* Product Image */}
              <img src={item.imageUrl} alt={item.name} className="w-full h-40 object-cover" />

              {/* Product Info */}
              <div className="p-4">
                <h3 className="text-lg font-semibold text-gray-800">{item.name}</h3>
                <p className="text-gray-600 mb-2">₹{item.price}</p>

                {/* Action Buttons */}
                <div className="flex space-x-2">
                  <button
                    onClick={() => addToCart(item)}
                    className="flex-1 bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
                  >
                    Add to Cart
                  </button>
                  <button
                    onClick={() => removeFromWishlist(item.id)}
                    className="flex-1 bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400"
                  >
                    Remove
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  );
}

export default Wishlist;
