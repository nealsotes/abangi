using System;
using System.Collections.Generic;
using AbangiAPI.Models;
using System.Linq;
using System.Threading.Tasks;

namespace AbangiAPI.Data
{
    public class MockUserAPIRepo : IUserAPIRepo
    {
        private readonly List<User> _users;
        public MockUserAPIRepo()
        {
            
        }

        public void CreateUser(User user)
        {
            throw new NotImplementedException();
        }

        public void DeleteUser(User user)
        {
            throw new NotImplementedException();
        }

        public IEnumerable<User> GetAllUsers()
        {
            var users = new List<User>
            {
                new User
                {
                    Id = 1,
                    Name = "John Doe",
                    Email = "johndoe@gmail.com"
                },
                 new User
                {
                    Id = 2,
                    Name = "Jane Doe",
                    Email = "janedoe@gmail.com"
                },
                 new User
                {
                    Id = 3,
                    Name = "John Smith",
                    Email = "johnsmith@gmail.com"
                }

            };
           return users;
        }

        public User GetUserById(int id)
        {
           return new User
            {
                Id = 1,
                Name = "John Doe",
                Email = "johndoe@gmail.com"
            };
        }

        public bool SaveChanges()
        {
            throw new NotImplementedException();
        }

        public void UpdateUser(User user)
        {
            throw new NotImplementedException();
        }
    }
}