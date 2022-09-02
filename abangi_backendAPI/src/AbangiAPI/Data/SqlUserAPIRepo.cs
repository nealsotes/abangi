using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using AbangiAPI.Models;


namespace AbangiAPI.Data
{
   
    public class SqlUserAPIRepo : IUserAPIRepo
    {
         private readonly UserContext _context;
        public SqlUserAPIRepo(UserContext context)
        {
            _context = context;
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
           return _context.Users.ToList();
        }

        public User GetUserById(int id)
        {
           return _context.Users.FirstOrDefault(p => p.Id == id);
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