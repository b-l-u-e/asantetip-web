import React from "react";
import blogPosts from "../BlogData";
import Header from "../components/Header";

const Blog = () => {
  return (
    <div>
      <Header bgColor="bg-deep-muted-blue" />
      <div className="bg-gray-100 min-h-screen py-12 px-4 lg:px-16 mt-10">
        <h1 className="text-5xl font-bold text-center text-deep-muted-blue mb-16">
          Blog Section
        </h1>
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
          {blogPosts.map((post) => (
            <div
              key={post.id}
              className="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-shadow duration-300 p-6 transform hover:scale-105"
            >
              <h2 className="text-3xl font-bold text-deep-muted-blue mb-4">
                {post.title}
              </h2>
              <p className="text-gray-700 text-lg mb-6">{post.description}</p>
              <button className="text-white bg-deep-muted-blue py-2 px-4 rounded-full hover:bg-muted-blue transition-colors duration-300">
                Read More
              </button>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Blog;
