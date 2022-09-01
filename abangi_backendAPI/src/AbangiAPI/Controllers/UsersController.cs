using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using AbangiAPI.Data;
using AbangiAPI.Models;

namespace AbangiAPI.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class UsersController : ControllerBase
    {
        private readonly IUserAPIRepo _repository;
        public UsersController(IUserAPIRepo repository)
        {
            _repository = repository;    
        }

        // GET api/users
        [HttpGet]
        public ActionResult<IEnumerable<User>> GetAllUsers()
        {
            return Ok(_repository.GetAllUsers());
        }

        [HttpGet("{id}")]
        public ActionResult<User> GetUserById(int id)
        {
            var result = _repository.GetUserById(id);
            if (result == null)
            {
                return NotFound();
            }

            return Ok(result);
        }

    }
}