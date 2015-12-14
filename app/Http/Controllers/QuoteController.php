<?php

namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function getIndex($author = null)
    {
        // Get all quotes (cap at 6, order by created at)
        // If author is provided => Only find quotes by author
        // Possibly paginate
        if (!is_null($author)) {
            $quotes = Author::where('name', $author)->first()->quotes()->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $quotes = Quote::take(6)->orderBy('created_at', 'desc')->paginate(6);
        }
        return view('quotes.index', ['quotes' => $quotes]);
    }

    public function getEdit($quote_id)
    {
        return view('quotes.edit');
    }

    public function postQuote(Request $request)
    {
        // Check if author and quote text are provided (Validation is explained in advanced part)
        if (!isset($request['author']) || !isset($request['quote']) || strlen($request['author']) === 0 || strlen($request['quote']) === 0) {
            return redirect()->back()->with(['fail' => 'Please provide both an author and a quote!']);
        }
        $authorText = ucfirst($request['author']);
        $quoteText = $request['quote'];

        // Check if author already exists in db
        $author = Author::where('name', $authorText)->first();
        if (!$author) {
            $author = new Author();
            $author->name = $authorText;
            $author->save();
        }

        // Create quote and map to author
        $quote = new Quote();
        $quote->quote = $quoteText;
        $author->quotes()->save($quote);

        return redirect()->route('index')->with(['success' => 'Quote saved!']);
    }

    public function getDeleteQuote($quote_id)
    {
        // Find quote and delete it
        $quote = Quote::find($quote_id);

        // Find author and check if any quotes remain
        if (count($quote->author->quotes) === 1) {
            $quote->author->delete();
        }
        $quote->delete();
        return redirect()->route('index')->with(['']);
    }

    public function putQuote(Request $request)
    {
        // Find quote
        // Update info and save
        return redirect()->route('index')->with(['']);
    }
}